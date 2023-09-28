@extends('layouts.main')

@section('container')
  <section class="sm:px-10 p-4">
    <h1 class="text-3xl font-black">Add Book</h1>
    <form action="{{ route("book.store") }}" method="post" class="mt-4 space-y-4">
      @csrf
      
      <div class="form-control w-full">
        <label class="label">
          <span class="label-text">Title</span>
        </label>
        <input type="text" name="title" placeholder="Enter book title here." class="input input-bordered w-full bg-base-200" required />
      </div>

      <div class="form-control w-full">
        <label class="label">
          <span class="label-text">Author</span>
        </label>
        <input type="text" name="author" placeholder="Enter book author here." class="input input-bordered w-full bg-base-200" required />
      </div>

      <div class="form-control w-full">
        <label class="label">
          <span class="label-text">Synopsis</span>
        </label>
        <textarea rows="4" class="textarea textarea-bordered text-base bg-base-200" name="synopsis" placeholder="Enter book synopsis here." required></textarea>
      </div>

      <div class="form-control w-full">
        <label class="label">
          <span class="label-text">Publisher</span>
        </label>
        <input type="text" name="publisher" placeholder="Enter book publisher here." class="input input-bordered w-full bg-base-200" required />
      </div>
      
      <div class="form-control w-full">
        <label class="label">
          <span class="label-text">Category</span>
        </label>
        <select name="category_uuid" class="select select-bordered w-full bg-base-200" required>
          <option value="" disabled selected>-- Choose Category --</option>
          @foreach ($categories as $category)
            <option value="{{ $category->uuid }}">{{ $category->category_name }}</option>
          @endforeach
        </select>
      </div>

      <div class="flex flex-col sm:flex-row">
        <button type="submit" class="btn btn-primary mt-2 w-full sm:w-24">Submit</button>
        <a href="{{ route("book.index") }}" class="btn btn-ghost mt-4 sm:mt-2 w-full sm:ml-4 sm:w-24">Back</a>
      </div>
    </form>
  </section>
@endsection
