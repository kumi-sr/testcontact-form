<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required','max:255'],
            'last_name' => ['required', 'max:255'],
            'gender' => ['required', 'in:男性,女性,その他'],
            'email' => ['required', 'email', 'max:255'],
            'tel1' => ['required', 'numeric', 'digits_between:3,5'],
            'tel2' => ['required', 'numeric', 'digits_between:3,5'],
            'tel3' => ['required', 'numeric', 'digits_between:3,5'],
            'address' => ['required', 'max:255'],
            'building' => ['max:255'],
            'select' => ['required', 'in:商品のお届けについて,商品の交換について,商品トラブル,ショップへのお問い合わせ,その他'],
            'content' => ['required', 'max:120']
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'last_name.required' => '名を入力してください',
            'gender.required'=> '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel1.required' => '電話番号を入力してください',
            'tel1.digits_between' => '電話番号は5桁までの数字で入力してください',
            'tel2.required' => '電話番号を入力してください',
            'tel2.digits_between' => '電話番号は5桁までの数字で入力してください',
            'tel3.required' => '電話番号を入力してください',
            'tel3.digits_between' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'select.required' => 'お問い合わせの種類を選択してください',
            'content.required' => 'お問い合わせの内容を入力してください',
            'content.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}
