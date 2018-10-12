/*
* Logic Programming
* Michelle Bergin
*
* TOC Trace, A very simple sentence generator
*
* Trace
*/
kicking(malfoy,harry).
eating(dudley).

happy(aunt_petunia) :- happy(dudley).
happy(uncle_vernon) :- happy(dudley), unhappy(harry).
happy(dudley) :- kicking(dudley,harry).
happy(dudley) :- eating(dudley).
/*
* ?- consult(week2).
* true.
* 
* ?- trace
* |    .
* true.
* 
* [trace]  ?- happy(aunt_petunia).
*    Call: (8) happy(aunt_petunia) ? creep
*    Call: (9) happy(dudley) ? creep
*    Call: (10) kicking(dudley, harry) ? creep
*    Fail: (10) kicking(dudley, harry) ? creep
*    Redo: (9) happy(dudley) ? creep
*    Call: (10) eating(dudley) ? creep
*    Exit: (10) eating(dudley) ? creep
*    Exit: (9) happy(dudley) ? creep
*    Exit: (8) happy(aunt_petunia) ? creep
* true.
* 
* [trace]  ?- notrace
* |    .
* true.
* 
* 
* A very simple sentence generator
*/
word(article,a).
word(article,every).
word(noun,criminal).
word(noun,'big kahuna burger').
word(verb,eats).
word(verb,likes).

sentence(Word1,Word2,Word3,Word4,Word5):-
    word(article,Word1),
    word(noun,Word2),
    word(verb,Word3),
    word(article,Word4),
    word(noun,Word5).


