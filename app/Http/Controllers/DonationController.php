<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class DonationController extends Controller
{
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $data['user_id'] = auth()->user()->id;
            $data['payment_screenshot'] = $this->uploadReceipt($request);
            Donation::create($data);
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }

    }

    public function index()
    {
        $donations = Donation::with('user')->get();
        return view('template.denvir.dist.alumni-officer-donation', compact('donations'));
    }

    public function update(Request $request, $id)
    {
        try {
            $donation = Donation::findOrFail($id);
            $donate = $request->all();
            $donate['is_Verify'] = "true";
            $donation->update($donate);
            return redirect()->back()->with('success', 'Donation updated successfully.');
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    private function uploadReceipt(Request $file)
    {

        // Validate the image using the request object
        $file->validate([
            'payment_screenshot' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        //rename the file by the current timestamp      
        $fileName = time() . '.' . $file->payment_screenshot->extension();

        try {
            // Store the uploaded file in storage/app/public/image/receipt
            $directory = storage_path('receipt');
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }
            $path = $file->file('payment_screenshot')->storeAs(
                'receipt',
                $fileName,
                "public"
            );

            if (!$path) {
                throw new \Exception('Failed to store the payment screenshot.');
            }

        } catch (\Exception $e) {
            // Handle the exception if directory creation fails
            throw new \Exception('Failed to upload the payment screenshot: ' . $e->getMessage());
        }

        return $fileName;
    }

    public function exportDonation_pdf()
    {
        $donations = Donation::with('user')->get();
        $pdf = PDF::loadView('template.denvir.dist.Donation_pdf', compact("donations"));
        return $pdf->download('donation-records-' . now()->format('Y-m-d') . '.pdf');
    }
}
