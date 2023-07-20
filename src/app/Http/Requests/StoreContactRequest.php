<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:20'],
            'title' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'url' => ['url', 'nullable'],
            'gender' => ['required', 'boolean'],
            'age' => ['required'],
            'contact' => ['required', 'string', 'max:200'],
            'caution' => ['required', 'aaccepted'],
        ];
    }

    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array<string, string>
     */    
    public function messages(): array
    {
        return [
            'name.required' => '氏名を入力してください。',
            'name.string' => '氏名は文字列で入力してください。',
            'name.max' => '氏名は20文字以内で入力してください。',
            
            'title.required' => '件名を入力してください。',
            'title.string' => '件名は文字列で入力してください。',
            'title.max' => '件名は50文字以内で入力してください。',
            
            'email.required' => 'メールアドレスを入力してください。',
            'email.email' => '有効なメールアドレスを入力してください。',
            'email.max' => 'メールアドレスは255文字以内で入力してください。',
            
            'url.url' => '有効なURL形式で入力してください。',
            
            'gender.required' => '性別を選択してください。',
            'gender.boolean' => '性別は真偽値で選択してください。',
            
            'age.required' => '年齢を選択してください。',
            
            'contact.required' => '問い合わせ内容を入力してください。',
            'contact.string' => '問い合わせ内容は文字列で入力してください。',
            'contact.max' => '問い合わせ内容は200文字以内で入力してください。',
            
            'caution.required' => '問い合わせには同意のチェックが必要です。',
            'caution.aaccepted' => '問い合わせには同意のチェックが必要です。',
        ];
    }
}
