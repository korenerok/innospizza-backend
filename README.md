## Innospizza Backend

Backend for assignment from Innoscripta, the yummi pizza.
Composed of an API, which connect to a MySQL database to store the data.

### Endpoints

- GET /api/items
    Return a JSON array composed by 2 arrays: "pizzas" and "misc", each which id, name and price of items

- POST /api/orders
    Receives data of the order items and the contact details from the client, and creates an order with the respective info and items