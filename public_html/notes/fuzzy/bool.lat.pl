% Elements
member(true).
member(false).
members([true,false]).

% Distance
distance(X,X,0).
distance(_,_,1).

% Ordering relation
leq(false,_).
leq(_,true).

% Supremum and infimum
bot(false).
top(true).

% Binary operations
and_bool(true,true,true).
and_bool(_,_,false).
or_bool(false,false,false).
or_bool(_,_,true).
