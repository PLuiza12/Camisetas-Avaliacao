<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Venda de camisetas
                    <table>
                        <tr>
                            <th>Marca</th>
                            <th>Tecido</th>
                            <th>Cor</th>
                            <th>Tamanho</th>
                            <th>Pagamento</th>
                        </tr>
                        @foreach(Auth::user()->camisas as $camisas)
                        <tr>
                            <td>{{$camisas->marca}}</td>
                            <td>{{$camisas->tecido}}</td>
                            <td>{{$camisas->cor}}</td>
                            <td>{{$camisas->tamanho}}</td>
                            <td>{{$camisas->pagamento}}</td>
                        </tr>
                        @endforeach
                    </table>

                    <form action="/add-camiseta" method="POST">
                        @csrf
                        <input type="text" name="marca" placeholder="marca">
                        <input type="text" name="tecido" placeholder="tecido">
                        <input type="text" name="cor" placeholder="cor">
                        <input type="text" name="tamanho" placeholder="tamanho">
                        <input type="text" name="pagamento" placeholder="pagamento">
                        <input type="submit" value="enviar" >

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
