# test-driven-development-example
A brief example process on implementing TDD.

If I do write tests, lots of them. Its much easier to sleep at night knowing the code youve written does what you expect it to do. I'm not saying your expectations are right, but thats a different argument.

Writing tests is different from Test Driven Development though. How many times have you had to refactor your code so thats its even testable? Or the test code is more complex than the actual code its testing? If you use Dependancy Injection and stick to the Single Responsibility Principle life becomes much easier, but in most cases you have the mindset that you write the code, then test it.

Its very unintuative to write the tests first, it stops you getting stuck in and writing code. First time I tried it, my mind went blank. I'm much happier coding and refactoring as I get a deeper understanding of whats required. Surely it would be better to write testable code by testing it, rather than relying on my skill level to write testable code? 

So I thought I would try and process how I plan to tackle TDD and stick to this mantra to see if I can rewire my brain into this approach.

* This concerns unit tests, these are the building block of integration.
* Tests should be simple and easy to understand
* Tests should initially throw errors as the code doesnt exist.
* Tests should then begin to fail as the coding structure is put into place.
* Tests should then pass as I drill down and solve each individual problem.

To acheive this I need to:

* Think what I want to achieve
* Write some tests prove that I have achieved this
* Write some code that achieves this
* Repeat and refine

So lets set ourselves a simple coding problem to run through this process:

* Some code to calculate the total of a shopping cart items
* We should be able to set this to include/exclude tax

