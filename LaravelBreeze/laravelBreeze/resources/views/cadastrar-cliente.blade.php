<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="">
                        <!-- Name -->
                        <div>
                            <x-input-label for="nome" :value="__('Nome')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="nome" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </br>
                        </div>
                        <!-- Name -->
                        <div>
                            <x-input-label for="endereco" :value="__('Endereço')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required autofocus autocomplete="endereco" />
                            <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
                            </br>
                        </div>
                        <!-- Name -->
                        <div>
                            <x-input-label for="bairro" :value="__('Bairro')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required autofocus autocomplete="bairro" />
                            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
                            </br>
                        </div>
                        <!-- Name -->
                        <div>
                            <x-input-label for="cep" :value="__('Cep')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required autofocus autocomplete="cep" />
                            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
                            </br>
                        </div>
                        <!-- Name -->
                        <div>
                            <x-input-label for="cidade" :value="__('Cidade')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" required autofocus autocomplete="cidade" />
                            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
                            </br>
                        </div>
                        <!-- Name -->
                        <div>
                            <x-input-label for="estado" :value="__('Estado')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="estado" :value="old('estado')" required autofocus autocomplete="estado" />
                            <x-input-error :messages="$errors->get('estado')" class="mt-2" />
                            </br>
                        </div>
                        <div>
                            <x-primary-button>
                                {{ __('Cadastrar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>