

table: comments
user_id (who is leaving the comment)
user_id_recipient (the user for who this comment is about)




Go to a individual user's page...
We see that users information
Plus any comments about that user (
    SELECT * FROM comments WHERE user_id_recipient = x
)


<form method='' action=''>

<input type='hidden' name='user_id_recipient' value='{{ $user->id }}'>
<textarea name='comment'>

</form>


$comment = new Comment();
$comment->user_id = $request->user()->id;
$comment->user_id_recipient = $request->user_id_recipient;
$comment->comment = $request->comment;
$comment->save();