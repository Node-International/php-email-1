## **New Calculation Engine** (10m?)

We’re developing a new quoting system for an insurance platform, and a key component is the **calculation engine** responsible for **premium calculations** across multiple product types (e.g. car, home, travel).

We’d like you to briefly explain how you would approach **structuring a calculation engine in PHP** that:

- Supports **multiple product types**, each with their own rating rules and logic
- Allows for **version control** of premium calculation logic – so different versions can run in parallel (e.g. old vs updated rates), and we can roll out updates safely
- Is **maintainable and scalable**, making it easy to add new products or update existing logic without breaking existing versions

---

### **Questions to Answer**

#### **1. How would you design a version-controlled calculation engine?**

- What data structures or components would you use to manage the rules for each version?
- How would you track changes to the rules and ensure that each version has the correct logic applied?

#### **2. What strategy would you use for managing different versions of the rules while keeping the system maintainable?**

#### **3. How would you handle changes in the rules over time?**

- Would you introduce new features or parameters in a new version?
- How would you handle backward compatibility?

#### **4. What types of testing would you implement to ensure that the calculation engine works as expected, particularly with versioning?**

---

### **Edge Case Considerations**

- What edge cases would you consider when structuring this calculation engine (e.g. missing parameters, invalid data)?
- How would you ensure data integrity across different versions?
