<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Crear tema') }}
      </h2>
  </x-slot>

<form action="{{route('temas.store')}}" method="post">
@csrf
@method('post')

<label for="titulo">Titulo</label>
<input type="text" name="titulo" placeholder="Escriba un titulo"  id="titulo" value="{{old('titulo',$tema->titulo)}}">
@error('titulo')
  <p class="text-red-500 text-sm mt-1">
      {{ $message }}
  </p>
@enderror
<br>
<label for="anyo">Año</label>
<input type="numeric" name="anyo" id="anyo" placeholder="Escriba el año del titulo"  value="{{old('anyo',$tema->anyo)}}">
@error('anyo')
  <p class="text-red-500 text-sm mt-1">
      {{ $message }}
  </p>
@enderror


<br>
<label for="duracion">Duración</label>
<input type="time" step="1"  name="duracion" id="duracion" placeholder="Escriba la duracion del tema"  value="{{old('anyo',$tema->duracion)}}">
@error('duracion')
  <p class="text-red-500 text-sm mt-1">
      {{ $message }}
  </p>
@enderror
<br>

<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
  Crear
</button>
</form>

</x-app-layout>
