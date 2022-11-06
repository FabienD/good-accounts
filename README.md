# An online solution to make the accounts, in a couple, between friends, between roommates.

This is a project that I made to help me and my friends to make the accounts between us. It is a simple web application that allows you to create a group of people and then make the accounts between them. 

This project is also use to explore **Domain Driven Design (DDD)** and the **Hexagonal Architecture**.

We use the Symfony Framework (6.1) with PHP (8.2) as backend and NextJS (13) with Tailwindcss as frontend.

## Registration

    - User can register with email and password.
    - User will receive a confirmation email and will be able to login after activation.

## Authentication

    - A register user can login with email and password.
    - A register user can reset password with email.

## Manage accounts

    - A register user can edit his profile.
    - A register user can close his account.

## Manage projects

    - A register user can create a project, the user become the owner of the project.
    - The owner of a project can can edit a project.
    - The owner of a project can delete a project. 
    - The owner of a project can archive a project. 
    - The owner of a project can add a friend to a project.
    - The owner of a project can remove a friend from a project.
    - The owner of a project can change the balance between project users.

## Add your expenses

    - Project users can add their expenses manualy or by uploading a file.
    - Projects users be notified when a new expenses are added, modified or deleted.
    - Expenses file must be in CSV format, system will try to discover the date, amount and description of the expense.

## Dashboard

    - A register user can see his projects.
    - A register user can see his balance.


