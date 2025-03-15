# PHP Test Script: Palindrome & Second Largest Number Finder

This repository contains a PHP script to:
1. **Check if a given string is a palindrome** (ignoring spaces, punctuation, and case sensitivity).
2. **Find the second largest number** in a given array.

---

## 📌 How to Set Up & Test

### **1️⃣ Clone the Repository**
First, clone the repository using Git:
```sh
git clone <repository-url>
```
Replace `<repository-url>` with the actual GitHub repository URL.

### **2️⃣ Navigate to the Directory**
```sh
cd <repository-folder>
```
Replace `<repository-folder>` with the actual cloned repository folder name.

### **3️⃣ Run the PHP Script**
Ensure PHP is installed on your system, then execute:
```sh
php test.php
```

---

## 📜 Script Details

### **Palindrome Check**
- The function `isPalindrome($str)` removes non-alphanumeric characters, converts to lowercase, and checks if the string reads the same forward and backward.
- **Example Input:**
  ```php
  $testStr = "A man, a plan, a canal: Panama";
  echo isPalindrome($testStr);
  ```
- **Expected Output:** ✅ Palindrome

### **Second Largest Number Finder**
- The function `secondLargest($arr)` finds the second largest number in a given array.
- **Example Input:**
  ```php
  $testArr = [10, 20, 4, 45, 99];
  echo secondLargest($testArr);
  ```
- **Expected Output:** ✅ Second Largest: 45

---

## 🛠 Requirements
- **PHP** (≥7.0) installed on your machine.
- A terminal or command prompt to execute the script.

---

## 📌 Expected Output
When you run `php test.php`, the output should be:
```sh
Testing Palindrome Check:
Input: "A man, a plan, a canal: Panama"
Result: ✅ Palindrome

Testing Second Largest Number Finder:
Input Array: 10, 20, 4, 45, 99
Result: ✅ Second Largest: 45
```
---


