<?php

namespace App\Http\Controllers;

use App\DTO\ContactDTO;
use App\Services\MainInjectionService;
use Illuminate\Http\Request;
use App\Lead;
use App\Customer;

class ContactInjectionController extends Controller
{
    protected $mainInjectionService;

    public function __construct(MainInjectionService $mainInjectionService)
    {
        $this->mainInjectionService = $mainInjectionService;
    }

    public function injectData(Request $request){
        try {
            if($request->lead_id || $request->customer_id) {
                if($request->lead_id) {
                    $leadData = Lead::find($request->lead_id);
                    if (!$leadData) {
                        return response()->json(['error' => 'Lead not found'], 404);
                    } else {
                        $leadData = $leadData->toArray();
                        $data = new ContactDTO($leadData['first_name'], $leadData['last_name'], $leadData['postal_code']); 
                        $this->mainInjectionService->injectData($data, 'lead');
        
                        return response()->json(['message' => 'Lead data injected into contacts table']);
                    }
                }
                if($request->customer_id) {
                    $customerData = Customer::find($request->customer_id)->toArray();
                    if (!$customerData) {
                        return response()->json(['error' => 'Customer not found'], 404);
                    }
            
                    $data = new ContactDTO($customerData['first_name'], $customerData['last_name'], $customerData['postal_code'], $customerData['city']);
            
                    $this->mainInjectionService->injectData($data, 'customer');
            
                    return response()->json(['message' => 'Customer data injected into contacts table']);
                }
            } else {
                return response()->json(['error' => 'Please check the route'], 404);
            }
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 404);
        }
    }
}
