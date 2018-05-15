# task_board_ticket
Here is a little scratch of what my code is doing. Feel free to contact me if something unclear.

I prefer to have table with city or place names like this to not compare places in text format.
 
+-------------------+
| ID |   Name       |
+-------------------+
| 1  |  Dubai       |
| 2  |  Berlin      |
| 3  |  Madrid      |
| 4  |  Lisbon      |
| 5  |  Yemen       |

To run code just run test.php in tests folder.

There is example data given from table.
Example data consists of tickets with unsorted data where user come from and need to go.
Please pay attention to 'from' and 'to' keys. You can change sorting of array items as you want.

After sending data with curl, data is sorted and returned. 

For extending transportation types we have Transport model you can add there new types.
Also there is ticket models. I think every type of tickets can have different attributes.
so we can extends from Ticket model to add new types of tickets. There are raw prototypes of tickets models.

- if task need to show data like list produced below

1.Take train 78A from Madrid to Barcelona. Sit in seat 45B.
2.Take the airport bus from Barcelona to Gerona Airport. No seat assignment.
3.From Gerona Airport, take flight SK455 to Stockholm. Gate 45B, seat 3A.
4.Baggage drop at ticket counter 344.
5.From Stockholm, take flight SK22 to New York JFK. Gate 22, seat 7B.
6.Baggage will we automatically transferred from your last leg.
7.You have arrived at your final destination.


 i can add view to show data as you want. Also will add to show baggage info. It needs more time to implement.
But I think it is more important to you to see working algorithm instead of pretty text.
- Unit tests not present because of time. If they are needed obviously feel free to ask me, will add.

tested on php >= 5.6

P.S. Would be better to do this type of projects using MongoDB. It is great for data without structure and Big data.
You can add any key value data for different type of tickets, places and so on.

P.S Thank you for task.




Be prepared to suggest to us how we could extend the code towards new types of transportation, which might have different
characteristics.
add new type taxi
