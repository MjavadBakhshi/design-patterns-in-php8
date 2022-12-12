# design-patterns-in-php8

I am going to share the design patterns architectures in terms of the php8 syntax.

You should run the codes by php 8.1

# Visitor pattern added 2022-12-12

Following this pattern not only let us to avoid spreading a specific functionality across diffrent classed but also helping us to follow OCP as well.

In this part I provide a abstract message sending service that able to be used
by diffrent medias such as Email, SMS and so on.

Take a look at the Visitor.php and follow the comments.

# Adapter pattern added 2022-12-13

Sometimes there is a usecase that We want to use a class that does not match expected interface so we declare a class based on expected interface and
use the third party class inside it as composition relationship. Then deligate commands to third party object.
For example we have transferMoney class that contains transfer and getBalance methods and we are going to use the third party class such as
PaypalTransfer to handle payments through paypal getway so we can not use this class directly. However we can use AdapterPattern to convert the interface of PaypalTransfer class to which to be expected.
