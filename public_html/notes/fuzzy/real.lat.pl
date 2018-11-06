% Elements
member(X) :- number(X), 0 =< X, X =< 1.
members([0.3,0.5,0.7]).

% Distance
distance(X,Y,Z) :- Z is abs(Y-X).

% Ordering relation
leq(X,Y) :- X =< Y.

% Supremum and infimum
bot(0).
top(1).

% Binary operations
and_prod(X,Y,Z) :- pri_prod(X,Y,Z).
and_godel(X,Y,Z) :- pri_min(X,Y,Z).
and_luka(X,Y,Z) :- pri_add(X,Y,U1), pri_sub(U1,1,U2), pri_max(U2,0,Z).
or_prod(X,Y,Z) :- pri_prod(X,Y,U1), pri_add(X,Y,U2), pri_sub(U2,U1,Z).
or_godel(X,Y,Z) :- pri_max(X,Y,Z).
or_luka(X,Y,Z) :- pri_add(X,Y,U1), pri_min(U1,1,Z).

% Aggregators
agr_aver(X,Y,Z) :- pri_add(X,Y,U1), pri_prod(U1,0.5,Z).
agr_geom(X,Y,Z) :- Z is sqrt(X*Y).
agr_very(X,Y) :- pri_prod(X,X,Y).

% Auxiliar operations
pri_prod(X,Y,Z) :- Z is X * Y.
pri_div(X,Y,Z) :- Z is X / Y.
pri_sub(X,Y,Z) :- Z is X - Y.
pri_add(X,Y,Z) :- Z is X + Y.
pri_min(X,Y,Z) :- (X=<Y,Z=X;X>Y,Z=Y).
pri_max(X,Y,Z) :- (X=<Y,Z=Y;X>Y,Z=X).
