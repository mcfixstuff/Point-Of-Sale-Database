CREATE TABLE IF NOT EXISTS INVENTORY (
    Inventory_ID INT AUTO_INCREMENT PRIMARY KEY,
    Item_Name VARCHAR(255) NOT NULL,
    Amount INT NOT NULL,
    Reorder_Threshold INT NOT NULL,
    Last_Stock_Shipment_Date DATE,
    Expiration_Date DATE
);
