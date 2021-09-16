<div>
    <form action=" {{ route('article.update') }} " method="get">
        <input type="text" name="title" value="{{ $article->title }} ">
        <br>
        <input type="text" name="content" value="{{ $article->content }} ">
        <br>
        <input type="submit" value="lưu">
    </form>
</div>