<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRegistrationRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => 'required|string|max:120',
            'email' => 'required|email|email:rfc,dns|max:120',
            'phone' => 'required|numeric|digits_between:10,15',
            'event_name' => 'required|string|max:150',
            'nic_number' => 'required|string|max:15',
            'nic_attachment' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ];
    }
    public function messages(): array
    {
        return [
            'full_name.required' => 'Please enter your full name.',
            'full_name.string' => 'Your full name should be text.',
            'full_name.max' => 'Your full name cannot be longer than 120 characters.',

            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Your email cannot be longer than 120 characters.',

            'phone.required' => 'Please enter your phone number.',
            'phone.string' => 'Your phone number should be numbers.',
            'phone.max' => 'Your phone number cannot be longer than 15 characters.',

            'event_name.required' => 'Please enter the name of the event.',
            'event_name.string' => 'The event name should be text.',
            'event_name.max' => 'The event name cannot be longer than 150 characters.',

            'nic_number.required' => 'Please enter your NIC number.',
            'nic_number.string' => 'Your NIC number should be text.',
            'nic_number.max' => 'Your NIC number cannot be longer than 15 characters.',

            'nic_attachment.required' => 'Please upload your NIC attachment.',
            'nic_attachment.file' => 'The NIC attachment must be a valid file.',
            'nic_attachment.mimes' => 'The NIC attachment must be a JPG, PNG, or PDF file.',
            'nic_attachment.max' => 'The NIC attachment cannot be larger than 2 MB.',
        ];
    }
}
