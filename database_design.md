# Database Design for Eco Maroc

## Entity Relationship Diagram (ERD)

```mermaid
erDiagram
    STREAMS ||--o{ INSTITUTIONS : "has many"
    
    STREAMS {
        int id PK
        string name
    }

    INSTITUTIONS {
        int id PK
        string name
        string city
        string major
        string type
        decimal min_grade
        int stream_id FK
        string image_url
        string map_url
        string website_url
        text description
    }

    TRANSPORT_PARTNERS {
        int id PK
        string name
        string type
        string discount_offer
        string website_url
        string image_url
    }

    TESTIMONIALS {
        int id PK
        string student_name
        string field_of_study
        text comment
        int rating
        datetime created_at
    }
```

## How to use
1. Open **phpMyAdmin**.
2. Create a new database named `eco_maroc` (if not exists).
3. Import the `database.sql` file generated in your project folder.
