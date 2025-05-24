<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use function PHPUnit\Framework\directoryExists;

class DonationController extends Controller
{
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $this->uploadReceipt($request);
            $data['user_id'] = auth()->user()->id;
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

        // Rename the image by the time
        $extension = $file->getClientOriginalExtension();
        $timestamp = now()->format('Ymd_His');
        $fileName = preg_replace('/\s+/', '_', "{$timestamp}.{$extension}");

        // Check first if the $fileName exists in the path, if so, replace the old one
        $filePath = storage_path("app/public/images/{$fileName}");
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // Image save to app/public/images/
        $file->storeAs('images', $fileName, 'public');

        // Optionally, return the file name or path if needed
        return $fileName;
    }
}
