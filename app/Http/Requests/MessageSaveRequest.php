<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MessageSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $uniqueTitleRule = Rule::unique('messages', 'title');

        if($this->message){
            $uniqueTitleRule->ignore($this->message);
        }

        return [
            'title' => [ 'required','min:5', 'max:32', $uniqueTitleRule],
            'content' => [ 'required', 'min:5', 'max:255' ],
            'category_for_message_id' => [ 'required', 'exists:category_for_messages,id' ]
        ];
    }

    public function attributes()
    {
        return [
            'content' => 'Full text'
        ];
    }
}
