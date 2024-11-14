# MySQL Database Project

This project creates a database in MySQL located in a folder called `DB`. The database contains two predefined users with their respective credentials.

## Structure

- **Database**: The database is inside MySQL and is called `sistema`.
- **Folder**: The database is located inside the folder named `DB` in your working environment.

## Users

The database contains the following two users with their credentials:

1. **Admin User**:
   - **Email**: `admin@gmail.com`
   - **Password**: `12345`
   - **User Type**: Administrator

2. **Normal User**:
   - **Email**: `normal@gmail.com`
   - **Password**: `123456`
   - **User Type**: Normal User

## Instructions

### 1. Create the database in MySQL

First, make sure you have MySQL installed and running. Then, connect to MySQL from the terminal or your preferred client.

```sql
CREATE DATABASE sistema;
USE sistema;
