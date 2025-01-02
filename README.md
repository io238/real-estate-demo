# Demo App for Real Estate Ownership and Access Controll

## Dependecies

-   https://github.com/staudenmeir/laravel-adjacency-list

## Relevant Files

### Models

-   [User](app/Models/User.php)
-   [Household](app/Models/Household.php)
-   [Employee](app/Models/Employee.php) (inherits the User model)
-   [LegalEntity](app/Models/LegalEntity.php)
-   [RealEstate](app/Models/RealEstate.php)

### Migrations

-   [users](/database/migrations/0001_01_01_000000_create_users_table.php)
-   [real_estate](/database/migrations/2025_01_02_122328_create_real_estates_table.php)
-   [legal_entities](/database/migrations/2025_01_02_123513_create_legal_entities_table.php.php)
-   [households](/database/migrations/2025_01_02_124045_create_households_table.php)

### Policy

-   [RealEstatePolicy](/app/Policies/RealEstatePolicy.php)
