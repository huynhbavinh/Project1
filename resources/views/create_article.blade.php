<style>
    .error{
        border: 1px solid red;
    }
</style>
<div>
    <form action=" {{ route('article.store') }} " method="post">
        @csrf
        <input type="text" class="@error('title') error @enderror " name="title" value="">
        @error('title')
            {{ $message }}
        @enderror
        <br>
        <input type="text" name="content" value="">
        <br>
        <select name="category_id" id="">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">submit</button>
    </form>
</div>