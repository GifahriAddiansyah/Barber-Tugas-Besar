@extends('admin.apps')

@section('contents')
          <div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
              <h1 class="text-2xl font-semibold">Tambah Data</h1>
            </div>
            <main>
          <div class="px-4 py-6 space-y-6 bg-white rounded-md dark:bg-darker">
            <h1 class="text-l font-semibold">Kode</h1>
            <form action="#" class="space-y-6">
              <input
                class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker"
                type="text"
                name="kodeBarang"
                placeholder="Kode"
                required
              />
            <form>
            <h1 class="text-l font-semibold">Nama List Menu</h1> 
            <form action="#" class="space-y-6">
              <input
                class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker"
                type="text"
                name="username"
                placeholder="Nama List Menu"
                required
              />
              <h1 class="text-l font-semibold">Harga</h1> 
              <input
                class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker"
                type="number"
                name="email"
                placeholder="Isi Harga"
                required
              />
              <button
                  type="submit"
                  class="px-4 py-2 font-medium text-center text-white transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker"
                >
                  Simpan
                </button>
</form>
@endsection