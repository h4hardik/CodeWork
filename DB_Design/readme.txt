Car - Car Master Table Contain Car detail

Owner - Owner Master Table Contain Owner Detail

Invoice_Owner - Transcation Table ( Car_id & Owner_ID is Foriegn Key )


========================================================

Second Scenario : 

We can also create the Master table  / realtaion table of Car & Owner and used its PK key in trans table as well


Car - Car - Car Master Table Contain Car detail

Owner - Owner Master Table Contain Owner Detail

Car_Owner - Contain Car_id and Owner_id as Foreign Key and CAR_OWNER_ID as PK

Invocie Trans Table - Contain Invoice_ID(PK) and CAR_OWNER_ID(FK) and Invoice_Detail , Invoice_Date