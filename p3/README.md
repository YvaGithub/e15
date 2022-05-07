

table: comments
user_id (who is leaving the comment)
user_id_recipient (the user for who this comment is about)




Go to a individual user's page...
We see that users information
Plus any comments about that user (
    SELECT * FROM comments WHERE user_id_recipient = x
)