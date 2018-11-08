bt(b(nil)).
bt(b(K,L,R)):- bt(L), bt(R), integer(K).
/*
* bt(b(5,b(6, b(nil), b(nil)),b(nil))).
* bt(b(5,b(4, b(nil), b(nil)),b(nil)))).
* bt(b(5,b(3, b(nil), b(nil)),b(7, b(nil), b(nil)))).
* bt(b(5,b(3, b(1, b(nil), b(nil)), b(4, b(nil), b(nil))),b(7, b(6, b(nil), b(nil)), b(8, b(nil), b(nil))))).
*
*               5
*           |       \
*           3       7     
*        |    \    |  \ 
*       1      4   6   8
*/

% b(5, b(3, b(1, b(nil), b(nil)), b(4, b(nil), b(nil))),b(7, b(6, b(nil), b(nil)), b(8, b(nil), b(nil)))).


% Problem 1
% Check if tree is nill
isNil(b(nil)).

% Get the root
rootOf(b(K, _, _), K).

% The root of the tree is greater than the root of its left
isBst(b(_, b(nil), b(nil))).

% Left tree
isBst(b(K, L, R)):- isNil(R), rootOf(L, Root), K > Root, isBst(L).

% Right tree
isBst(b(K, L, R)):- isNil(L), rootOf(R, Root), K < Root, isBst(R).

% Check left and right
isBst(b(K, L, R)):- rootOf(R, RootRight), rootOf(L, RootLeft), K > RootLeft, K < RootRight, isBst(L), isBst(R).

% Problem 2
inorder(b(K, b(nil), b(nil)), [K|[]]).
inorder(b(K, L, R), List):- isNil(R), inorder(L, List1), append([K], List1, List).
inorder(b(K, L, R), List):- isNil(L), inorder(R, List1), append([K], List1, List).
inorder(b(K, L, R), List):- inorder(L, List1), inorder(R, List2), append(List1, [K|List2], List).

% Problem 3
postorder(b(K, b(nil), b(nil)), [K|[]]).
postorder(b(K, L, R), List):- isNil(L), postorder(R, List1), append(List1, [K], List).
postorder(b(K, L, R), List):- isNil(R), postorder(L, List1), append(List1, [K], List).
postorder(b(K, L, R), List):- postorder(L, List1), postorder(R, List2), append(List2, List1, List3), append([K], List3, List).

% Problem 4
preorder(b(K, b(nil), b(nil)), [K|[]]).
preorder(b(K, L, R), List):- isNil(L), preorder(R, List1), append(List1, [K], List).
preorder(b(K, L, R), List):- isNil(R), preorder(L, List1), append(List1, [K], List).
preorder(b(K, L, R), List):- preorder(L, List1), preorder(R, List2), append([K|List1], List2, List).

% Problem 5 Works but I feel VERY inefficient
mem(b(Wat, b(nil), b(nil)), Wat).
mem(b(K, L, _), Wat):- mem(L, Wat); K = Wat.
mem(b(K, _, R), Wat):- mem(R, Wat); K = Wat.

% Problem 6
bmem(b(Wat, b(nil), b(nil)), Wat).
bmem(b(K, _, R), Wat):- Wat > K, bmem(R); Wat = K.
bmem(b(K, L, _), Wat):- Wat < K, bmem(L); Wat = K.

% Problem 7
height(b    )
