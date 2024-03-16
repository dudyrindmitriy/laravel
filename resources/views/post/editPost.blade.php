<form action="" method="POST">
    @csrf
    <input name="title" value="{{$post->title}}"><br>
    <input name="desc" value="{{$post->desc}}"><br>
    <input name="date" value="{{$post->date}}"><br>
    <textarea name="text">{{$post->text}}</textarea><br>
    <input name="submit" type="submit" value="Сохранить">
 </form>
