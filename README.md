# 🛒 Welcome to PurchasingManagement 🛒

This project aims to develop an API platform where you can make your own ShopList

to manage everything you need to buy when you go to the Supermarket

---
## 🛠️🚀 Tech Stack

### **Languages**:
- HTML
- Blade (Laravel template engine)

### **Frameworks**:
- Laravel

### **Server**:
- XAMPP
- Apache
- Node.js

### **Database**:
- MySQL

### **Tools & Others**:
- Composer
- Postman

## 📊📁 DB Diagram
Below is a diagram of the database:

- **ShoppingList Table:** Table that registers all the products you have to buy.

![image](https://github.com/user-attachments/assets/81060c3c-fa46-44ca-9865-453aa138991c)

## 🔧⚙️ Installation

Follow these steps to install and set up the project:

- Clone the repository
```
https://github.com/SantiVigna/PurchasingManagement.git
```

- Install Composer dependencies

```
composer install
```
- Install Node.js dependencies

```
npm install
```
- Duplicate .env.example file and rename to .env
- In this new .env, change the variables you need, but it is very important to uncomment the database connection lines that are these:
 
In DB_CONNECTION will come mysqlite, change it to the db you use (in this case MySQL)

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=PurchasingManagement
DB_USERNAME=root
DB_PASSWORD=
```
 - Generate an App Key with this command 
```
php artisan key:generate 
```
- Create the KataDni DB in your SQL Database program, if you dont do this the app wont work

- Execute migrations  
```
php artisan migrate
```

## ▶️💻 Run Locally
- How to run the Laravel server  
```
php artisan serve
```

## 🏃‍♂️🧪 Running Tests

To run test you should uncomment the following lines on the phpunit.xml file.

![image](https://res.cloudinary.com/dierpqujk/image/upload/v1733829455/imagen_2024-12-10_121742908_b3mfqm.png)


With the following command we run the tests and we will also generate a coverage report, the first one in the terminal, and the second one a html coverage report

```bash
  php artisan test --coverage
```

```bash
  php artisan test --coverage-html=coverage-report
```

If everything is configured correctly, tests should pass, and the coverage report will show `100%` coverage approximately.

#### Test Summary:
![image](https://github.com/user-attachments/assets/9e0ea300-43c8-49c3-998d-86c20dde7abc)

![image](https://github.com/user-attachments/assets/e9fb1d86-d59d-495c-addd-20f7c9ea8db3)


## 📡🌐 PurchasingManagement API

This API allows you to manage the list of products you have to buy

#### Get all the products

```http
GET /api/shoppinglists
```

#### Response:
- **Status Code:** 200
- **Content Type:** application/json

#### Get one product

```http
GET /api/shoppinglists/ID
```

#### Response:
- **Status Code:** 200
- **Content Type:** application/json

#### Create a new Product

```http
POST /api/shoppinglists
```

#### Response:
- **Status Code:** 201/409
- **Content Type:** application/json

#### Body: 

| Parameter | Type     | Description                    |
| :-------- | :------- | :-------------------------     |
| `name` | `string` | **Required**. Name of the Product |
| `price` | `float` | **Required**. Price of the Product |

#### Edit an specific Product

```http
PUT /api/shoppinglists/ID
```

#### Response:
- **Status Code:** 200
- **Content Type:** application/json


#### Body: 

| Parameter | Type     | Description                    |
| :-------- | :------- | :-------------------------     |
| `name` | `string` | Name of the Product |
| `price` | `float` | Price of the Product |

#### Delete one product

```http
DELETE /api/shoppinglists/ID
```

#### Response:
- **Status Code:** 200
- **Content Type:** application/json

- #### Delete all the products from the list

```http
DELETE /api/delete
```

#### Response:
- **Status Code:** 200
- **Content Type:** application/json

## ✍️🙍 Author

- **Santino Vigna:**
[![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/SantiVigna)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](www.linkedin.com/in/miguel-garcía-lópez-609136284)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:ynotvigna@gmail.com)
