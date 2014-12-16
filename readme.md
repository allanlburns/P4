Welcome to P4!!!!

**Allan's In-Store Subcription Service online interface!

**Live URL: 

****(http://p4.allanlburns.com "Live URL")

**Github:

****(http://github.com/allanlburns/P4 "Github")

**Origin Story and Explanation:

****This application replaces the current paper-based, labor-intensive workflow of the subscription service offered by the comic book retail company that I work for. My company has eight stores around the Boston area, and I manage one of these store locations. Under the current model, a customer who wants the in-store subscription service fills out a paper form, turns it in to a store employee who then sends it via the twice-weekly delivery truck to the main office, where one person types the information into the computerized system, to which no one outside of the main office has access. The most inefficient part of the service in terms of user experience is the turn around time for the user to add, delete, or view the books on his or her list. Whenever the customer wants to add or drop a comic to their list, they have to come in the store, write this change on a piece of paper, and at the end of the week a store employee types a summary of these changes in an e-mail to the responsible person in the main office. Because the subscription service is only a miniscule part of his job, there is often a lag in actually making the changes. 

****Customers also cannot readily access a list of titles in their subscription, which can be problematic because some comics are published irregularly or infrequently, or if a customer has a large pull list, remembering all of these books can be difficult. Currently, if a customer wants a list of their pull list, they have to make the request in writing as they would to add or drop a comic, and the store employee would include the request for a printout of the customer's pull list in the weekly e-mail to the main office. The quickest turn around time to receive this list would be at least one week, if not two or more. 

****That's where my project's online subscription interface comes in. New customers can set up a user account, select which books they want in their pull list, and add or drop titles as needed--all in real time. If a subscriber wants to terminate their subscription, the functionality is in the interface and is as easy as clicking a button, eliminating the frustration of delinquint subscribers who simply stop coming in to the store but never officially close their account, which results in weeks of unsold comics accumulating in their subscription folders. 


**Table Relationships:

	Customers to Comics: Many to many, explanation:
	Stores to Comics: many to many, explanation:
	Stores to customers: one to many, explanation:

**Demo:
****I would love to have been able to demo my project live on 12/11/14, but I just didn't have quite enough functionality to do make the demo very interesting. That being the case, I'll include a Jing screencast to demo my project. 











**Packages:

Paste/Pre by paste:  https://github.com/paste/Pre.php

Laravel Debug Bar by  Barryvdh:  https://github.com/barryvdh/laravel-debugbar

