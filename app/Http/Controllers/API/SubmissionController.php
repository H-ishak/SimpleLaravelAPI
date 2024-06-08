<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Jobs\SubmissionJob;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Exception;

class SubmissionController extends Controller
{
    public function submit(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required'
            ]);

            SubmissionJob::dispatch($request->name, $request->email, $request->message);

            return response()->json([
                'message' => 'Submission successful'
            ], 200);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => $e->errors()
            ], 422);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
