<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新規作成
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="text-gray-600 body-font relative">
                      <form action="{{ route('contacts.store') }}"  method="post">
                        @csrf
                        <div class="container px-5 mx-auto">
                          <div class="lg:w-1/2 md:w-2/3 mx-auto">
                            <div class="flex flex-wrap -m-2">
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="name" class="leading-7 text-sm text-gray-600">氏名</label>
                                  <input value="{{ old('name') }}" type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                              </div>
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="title" class="leading-7 text-sm text-gray-600">件名</label>
                                  <input value="{{ old('title') }}" type="text" id="title" name="title" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                </div>
                              </div>
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                                  <input value="{{ old('email') }}" type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                              </div>
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="url" class="leading-7 text-sm text-gray-600">ホームページ (任意)</label>
                                  <input value="{{ old('url') }}" type="url" id="url" name="url" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  <x-input-error :messages="$errors->get('url')" class="mt-2" />
                                </div>
                              </div>
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label class="leading-7 text-sm text-gray-600">性別</label><br>
                                  <input {{ old('gender') == 0 ? 'checked' : '' }} type="radio" name="gender" value="0">男性
                                  <input {{ old('gender') == 1 ? 'checked' : '' }} type="radio" name="gender" value="1">女性
                                  <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                                </div>
                              </div>
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="age" class="leading-7 text-sm text-gray-600">年齢</label>
                                  <select name="age">
                                    <option value="">選択してください</option>
                                    <option {{ old('age') == 1 ? 'selected' : '' }} value="1">〜19歳</option>
                                    <option {{ old('age') == 2 ? 'selected' : '' }} value="2">20歳〜29歳</option>
                                    <option {{ old('age') == 3 ? 'selected' : '' }} value="3">30歳〜39歳</option>
                                    <option {{ old('age') == 4 ? 'selected' : '' }} value="4">40歳〜49歳</option>
                                    <option {{ old('age') == 5 ? 'selected' : '' }} value="5">50歳〜59歳</option>
                                    <option {{ old('age') == 6 ? 'selected' : '' }} value="6">60歳〜</option>
                                  </select>
                                  <x-input-error :messages="$errors->get('age')" class="mt-2" />
                                </div>
                              </div>
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="contact" class="leading-7 text-sm text-gray-600">お問い合わせ内容</label>
                                  <textarea id="contact" name="contact" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ old('contact') }}</textarea>
                                  <x-input-error :messages="$errors->get('contact')" class="mt-2" />
                                </div>
                              </div>
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <input type="checkbox" id="caution" name="caution" >注意事項に同意する
                                  <x-input-error :messages="$errors->get('caution')" class="mt-2" />
                                </div>
                              </div>
                              <div class="p-2 w-full">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">新規登録する</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
