## **New Calculation Engine** (10m?)

We’re developing a new quoting system for an insurance platform, and a key component is the **calculation engine** responsible for **premium calculations** across multiple product types (e.g. car, home, travel).

We’d like you to briefly explain how you would approach **structuring a calculation engine in PHP** that:

- Supports **multiple product types**, each with their own rating rules and logic
- Allows for **version control** of premium calculation logic – so different versions can run in parallel (e.g. old vs updated rates), and we can roll out updates safely
- Is **maintainable and scalable**, making it easy to add new products or update existing logic without breaking existing versions

#################################################
- create a classes that handles a product, schemes, premiums; (product::car or scheme::aviva)
- create schemes for each broker (shemes folder -> this maybe we receive a big CSV file and converting to XML to set the info in the DB)
- control version in the composer files and tagging in the git actions and build images in docker so we can deploy different versions of the applications
- create a business logic to to the 'same' job independent the product, usually each broker has a different Scheme,
Yes, we need to have an scheme for each broker but the calculation logic is the same when applying the rates, addings addons or other services
- create a log to check if the responses from the brokers APIs are correctly, handling different schemes more erros we can have so it's important to track each one
- it's a good Idea this app be structured with micro services so can be 'easy' to mantain and scale
(dataconverter service, schemes service, premium calculation service)
- add unit and end to end tests as much as we can to guarantee new updates don't crash the app
#################################################

---

### **Questions to Answer**

#### **1. How would you design a version-controlled calculation engine?**

- What data structures or components would you use to manage the rules for each version?
###when we add a new scheme or update, we keep the old and add the new one with a v1 or v2 tag, and when we want to use specific versions we just need to tell what version schemev1 (eg)
- How would you track changes to the rules and ensure that each version has the correct logic applied?
####add automatic tests and user tests

#### **2. What strategy would you use for managing different versions of the rules while keeping the system maintainable?**

#### **3. How would you handle changes in the rules over time?**

- Would you introduce new features or parameters in a new version?
###usually I set the rule version integrated with the DB, so adding a v1, or v2 so we know which version of scheme use
- How would you handle backward compatibility?
###track and set the version

#### **4. What types of testing would you implement to ensure that the calculation engine works as expected, particularly with versioning?**

---

### **Edge Case Considerations**

- What edge cases would you consider when structuring this calculation engine (e.g. missing parameters, invalid data)?
- How would you ensure data integrity across different versions?
