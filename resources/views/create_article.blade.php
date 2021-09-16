<div>
    <form action=" {{ route('article.store') }} " method="post">
        @csrf
        <input type="text" name="title" value="">
        <br>
        <input type="text" name="content" value="">
        <br>
        <button type="submit">submit</button>
    </form>
</div>