/*
* Michelle Bergin
* Week 4
* 
* Problems: Matching tasks with lists, List processing: computing different return values, List processing: different termination criteria, Operations on vectors, Finding the maximum, Working with append
*
* Matching tasks with lists
* (a,(b,(c,(d,[])))) = [a|[b|[c|[d|[]]]]].
* One on the right is a list, the other is a... tuple?
*
* (a,(b,(c,(d,[])))) = [a,b,c,d].
* same as above
*
* [a,b,c,d] = [a|[a,b,c]].
* false. because the list on the right is [a,a,b,c]
*
* [a,b,c,d] = [Head|Tail].
* the head is merged with a and tail with [b,c,d]
*
* [a,b,c,d] = [a|X].
* X is merged with [b,c,d]
*
* [a,X] = [a|[a,b,c]].
* false! X can't be merged in a way to make it a list of aabc
*
* [a,b,c,d] = [a,b|[c,d]].
* THey are the same
*
* [a,b,c,d] = [X,Y|_].
* This would return a and b but the rest we do not care about
* X = a
* Y = b
*
* [] = [[]].
* false! [] is not an array of array
*
* [X] = [[]].
* X = []
*
* List processing: computing different return values
*/
all_as([]).
all_as([X|Y]):- X = a, all_as(Y).

replace_a_b_c([],[]).
replace_a_b_c([a|T1],[b|T2]):- replace_a_b_c(T1,T2).
replace_a_b_c([b|T1],[c|T2]):- replace_a_b_c(T1,T2).
replace_a_b_c([c|T1],[a|T2]):- replace_a_b_c(T1,T2).
replace_a_b_c([X|T1],[X|T2]):- replace_a_b_c(T1,T2).

list_length([],0).
list_length([_|Y],L):- list_length(Y,L1), L is L1 + 1.

/*
 * List processing: different termination criteria
 */

add_one([],[]).
add_one([H1|T1],[H2|T2]):- H2 is H1 + 1, add_one(T1,T2).

contains_0([0|_]).
contains_0([H|T]):- H \= 0, contains_0(T).

/*
 * Operations on vectors
 */
scalarMult(_,[],[]).
scalarMult(X,[H1|T1],[H2|T2]):- H2 is H1 * X, scalarMult(X,T1,T2).

dot([],[],0).
dot([H1|T1],[H2|T2],R):- dot(T1,T2,R1), R is R1 + (H1 * H2).

/*
 * Finding the maximum
 */

max([M],M).
max([H|T],M):- max(T,M1), H > M1, M = H.
max([H|T],M):- max(T,M1), H =< M1, M = M1.

/*
 * Working with append
 */

prefix(X,Y):- append(X,_,Y).

suffix(X,Y):- append(_,X,Y).

sublist(X,Y):- append(X,_,Y).
sublist(X,[_|T]):- append(X,_,T), sublist(X,T).

/*
 * Neighbors
 */
zebra(N):-
    Street = [_House1, _House2, _House3],
    member(house(red,_,_), Street),
    member(house(blue,_,_), Street),
    member(house(green,_,_), Street),
    member(house(red,english,_), Street),
    member(house(_,spanish,jaguar), Street),
    sublist([house(_,_,snail),house(_,japanese,_)], Street),
    sublist([house(blue,_,_),house(_,_,snail)], Street),
    member(house(_,N,zebra),Street).
prefix(P,L) :- append(P,_,L).
suffix(S,L) :- append(_,S,L).
sublist(SubL,L) :- suffix(S,L), prefix(SubL,S).
