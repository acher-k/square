# square
---
## MCD
- User
  - email :string
  - password :string
  - role :string

- Customer
  - email :string
  - password :string
  - role :string §§§§§
  - firstName :string
  - LastName :string
  - address : relation vers Address (1 User a n Address et 1 Address a 1 User)
  - 

- Address 
  - number :integer
  - street :string
  - city :string
  - zip :string
  - country :string
  - additional :string

---
- Order
  - customer relation vers Customer (1 Order a 1 Customer et 1 Customer a n Order)
  - details : relation vers OrderDetail (1 Order a n OrderDetail et 1 OrderDetail a 1 Order)
  - deliveryMethod : relation (1 Order a 1 deliveryMethod et 1 deliveryMethod a n Order)

    
- OrderDetail
  - quantity: integer
  - canva: relation vers Canva (1 OrderDetail a 1 Canva et 1 Canva a n OrderDetail)
  - format : relation vers Format (1 OrderDetail a 1 Format et 1 Format a n OrderDetails)
  - support : relation vers Support (1 OrderDetail a 1 Support et 1 Support a n OrderDetails)


- DeliveryMethod
  - name : string
  - price : decimal 4.2
---



- Canva
  - title :string
  - price :decimal 5.2
  - image : relation vers Image (1 Canva a 1 Image et 1 Image a 1 Canvas)

- Image
  - name : string
  - color : relation vers Color (1 Image a 1 Color et 1 Color a n Images)
  - category : relation vers Category (1 Image a 1 Category et 1 Category a n Images)
     
- Format
  - format :string
  - price :decimal 4.2

- Color
  - color :string

- Category
  - name :string

- Support
  - support :string
  - price : decimal 4.2



