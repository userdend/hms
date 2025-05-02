import React from "react";
import {
  Button,
  Input,
  FormControl,
  FormLabel,
  FormErrorMessage,
} from "@chakra-ui/react";
import { Field, Form, Formik } from "formik";
import { Link } from "react-router-dom";

const EmployeeAdd = () => {
  const validateName = (value) => {
    let error;
    if (!value) {
      error = "First name is required";
    } else if (value.toLowerCase() !== "naruto") {
      error = "Jeez! You're not a fan 😱";
    }
    return error;
  };

  return (
    <>
      <Button as={Link} to={".."} colorScheme="teal" mb={4}>
        Back
      </Button>
      <Formik
        initialValues={{
          firstName: "",
          lastName: "",
          email: "",
          phone: "",
        }}
        onSubmit={(values, actions) => {
          setTimeout(() => {
            alert(JSON.stringify(values, null, 2));
            actions.setSubmitting(false);
          }, 1000);
        }}
      >
        {(props) => (
          <Form>
            <Field name="firstName" validate={validateName}>
              {({ field, form }) => (
                <FormControl
                  isInvalid={form.errors.firstName && form.touched.firstName}
                >
                  <FormLabel>First Name</FormLabel>
                  <Input {...field} placeholder="First Name" />
                  <FormErrorMessage>{form.errors.firstName}</FormErrorMessage>
                </FormControl>
              )}
            </Field>

            <Field name="lastName">
              {({ field, form }) => (
                <FormControl
                  isInvalid={form.errors.lastName && form.touched.lastName}
                  mt={4}
                >
                  <FormLabel>Last Name</FormLabel>
                  <Input {...field} placeholder="Last Name" />
                  <FormErrorMessage>{form.errors.lastName}</FormErrorMessage>
                </FormControl>
              )}
            </Field>

            <Field name="email">
              {({ field, form }) => (
                <FormControl
                  isInvalid={form.errors.email && form.touched.email}
                  mt={4}
                >
                  <FormLabel>Email</FormLabel>
                  <Input type="email" {...field} placeholder="Email" />
                  <FormErrorMessage>{form.errors.email}</FormErrorMessage>
                </FormControl>
              )}
            </Field>

            <Field name="phone">
              {({ field, form }) => (
                <FormControl
                  isInvalid={form.errors.phone && form.touched.phone}
                  mt={4}
                >
                  <FormLabel>Phone</FormLabel>
                  <Input type="tel" {...field} placeholder="Phone" />
                  <FormErrorMessage>{form.errors.phone}</FormErrorMessage>
                </FormControl>
              )}
            </Field>

            <Button
              mt={6}
              colorScheme="blue"
              isLoading={props.isSubmitting}
              type="submit"
            >
              Submit
            </Button>
          </Form>
        )}
      </Formik>
    </>
  );
};

export default EmployeeAdd;
