<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Cliente') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('cliente.update', $cliente->id) }}">
                        @csrf
                        @method('put')

                        <!-- Nome -->
                        <div class="mt-4">
                            <x-input-label for="name" :value="__('Nome')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $cliente->name)" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Endereço -->
                        <div class="mt-4">
                            <x-input-label for="ender" :value="__('Endereço')" />
                            <x-text-input id="ender" class="block mt-1 w-full" type="text" name="ender" :value="old('ender', $cliente->ender)" required autofocus autocomplete="ender" />
                            <x-input-error :messages="$errors->get('ender')" class="mt-2" />
                        </div>

                        <!-- Baiiro -->
                        <div class="mt-4">
                            <x-input-label for="bairro" :value="__('Bairro')" />
                            <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro', $cliente->bairro)" required autofocus autocomplete="bairro" />
                            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
                        </div>

                        <!-- CEP -->
                        <div class="mt-4">
                            <x-input-label for="cep" :value="__('CEP')" />
                            <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep', $cliente->cep)" required autofocus autocomplete="cep" />
                            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
                        </div>

                        <!-- Cidade -->
                        <div class="mt-4">
                            <x-input-label for="city" :value="__('Cidade')" />
                            <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city', $cliente->city)" required autofocus autocomplete="cidade" />
                            <x-input-error :messages="$errors->get('city')" class="mt-2" />
                        </div>

                        <!-- Estado -->
                        <div class="mt-4">
                            <x-input-label for="estado" :value="__('Estado')" />
                            <select id="estado" class="block mt-1 w-full border-rose-300 focus:border-rose-500 focus:ring-rose-500 rounded-md" type="text" name="estado" :value="old('estado', $cliente->estado)" required autofocus autocomplete="estado">
                                <option selected disabled >Escolha...</option>
                                <option>AC</option>
                                <option>AL</option>
                                <option>AP</option>
                                <option>AM</option>
                                <option>BA</option>
                                <option>CE</option>
                                <option>ES</option>
                                <option>GO</option>
                                <option>MA</option>
                                <option>MT</option>
                                <option>MS</option>
                                <option>MG</option>
                                <option>PA</option>
                                <option>PB</option>
                                <option>PR</option>
                                <option>PE</option>
                                <option>PI</option>
                                <option>RJ</option>
                                <option>RM</option>
                                <option>RS</option>
                                <option>RO</option>
                                <option>RR</option>
                                <option>SC</option>
                                <option>SP</option>
                                <option>SE</option>
                                <option>TO</option>
                                <option>DF</option>
                            </select>
                            <x-input-error :messages="$errors->get('estado')" class="mt-2" />

                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4  bg-rose-500 hover:bg-rose-600">
                                {{ __('Atualizar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
