<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    // Add your authorization logic here
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
      // Add your validation rules for the article fields here
      'title' => 'required|string|max:255',
      'content' => 'required|string',
      // Add more fields and validation rules as needed
    ];
  }
}