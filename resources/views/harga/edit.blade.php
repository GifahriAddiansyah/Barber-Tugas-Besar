@extends('admin.apps')

@section('contents')
<div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
              <h1 class="text-2xl font-semibold">Edit Data</h1>
            </div>
         
          <div class="px-4 py-6 space-y-6 bg-white rounded-md dark:bg-darker">
            <h1 class="text-l font-semibold">Kode</h1>
            <form action="{{ url('update',$hargas->id) }}" method="post" class="space-y-6">
              {{ csrf_field() }}
              <input
                class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker"
                type="text"
                name="kode"
                placeholder="Kode"
                required
                value="{{ $hargas->kode }}"
              />
            <h1 class="text-l font-semibold">Nama List Menu</h1> 
           <input
                class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker"
                type="text"
                name="nama_menu"
                placeholder="Nama List Menu"
                required
                value="{{ $hargas->nama_menu }}"
              />
              <h1 class="text-l font-semibold">Harga</h1> 
              <input
                class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker"
                type="number"
                name="harga"
                placeholder="Isi Harga"
                required
                value="{{ $hargas->harga }}"
              />
              <button
                  type="primary"
                  class="px-4 py-2 font-medium text-center text-white transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker"
                >
                  Edit
                </button>
</form>
</div>
@endsection