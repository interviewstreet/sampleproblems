module Main where
myinput = do
    aan <- getLine
    return aan

getlist n = if n==0 then return [] else do i <- myinput; is <- getlist(n-1); return (i:is)

display zs = sequence_ [putStrLn (b) | (b) <- zs]


printHelloWorld n = do
main = do
    temp <- getLine
    let _n = read temp::Int


    printHelloWorld _n 

