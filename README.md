# GivesTo

GivesTo is gift giving list generator that quickly and randomly picks people that aren't in the same family or sub-group.  So, for example, in the example below John, Paul, George, and Ringo would not never be picked to give gifts to each other.

```php
include('givesto.php');

$group_list = [
	['John','Paul','George','Ringo'],
	['Elmo','Oscar','Big Bird','Bert'],
	['Larry','Curly','Moe']
];

generate_gives_to($group_list);
```

Example output (```$ php example.php ```):

```
Gift Giving List 2015
------------------------
JOHN gives to OSCAR
PAUL gives to ELMO
GEORGE gives to BERT
RINGO gives to MOE
ELMO gives to RINGO
OSCAR gives to CURLY
BIG BIRD gives to PAUL
BERT gives to LARRY
LARRY gives to JOHN
CURLY gives to BIG BIRD
MOE gives to GEORGE
```

## Why?

Christmas is a time for gift-giving --- sometimes, families and friends need a quick way to determine who gives to who. So, I created this little tool that allows families and friends to quickly enter the names of people (that will be giving and receiving gifts) to have gift-giving list automatically (and randomly) generated. 

It is nice to have a tool like this so the lists can be generated early and gift-giving becomes that much easier --- you don't have to wait until somebody gets the old hat out and writes down everyone's name. Additionally, it seems to be more fair and is less complicated. ;) 

---------------

"Drawing names out of a hat can help out a lot when the family is growing. Even the little ones can get in on the fun and present a member of the family with a gift they chose. If each member of your household drawing a name still runs too far into the budget, you can improvise with a 'family gift.' The family gift could be a game they can all play together, a great DVD, or a decorative piece the family can display in their home. Having your household family members help pick the gift can be fun and relieve the pressure of one person having to pick the gift for everyone." -- Katie Just
