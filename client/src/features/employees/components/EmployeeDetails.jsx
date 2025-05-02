import React, { useEffect } from "react";
import {
  Avatar,
  Badge,
  Box,
  Button,
  Card,
  CardHeader,
  CardBody,
  CardFooter,
  Flex,
  Heading,
  SkeletonCircle,
  SkeletonText,
  Stack,
  StackDivider,
  SimpleGrid,
  Text,
  useColorModeValue,
  Wrap,
  WrapItem,
} from "@chakra-ui/react";
import { Link, useParams } from "react-router-dom";
import useEmployees from "../hooks/useEmployees";

const EmployeeDetails = () => {
  const { id } = useParams();
  const { employee, loading, error, get } = useEmployees();
  const bg = useColorModeValue("white", "gray.700");

  useEffect(() => {
    get(id);
  }, []);

  return (
    <>
      <Button as={Link} to={".."} colorScheme="teal" mb={4}>
        Back
      </Button>

      {loading ? (
        <Box mb={4} borderRadius={"md"} padding="6" boxShadow="lg" bg={bg}>
          <SkeletonCircle size="10" />
          <SkeletonText mt="4" noOfLines={2} spacing="4" skeletonHeight="2" />
        </Box>
      ) : (
        <>
          <Card>
            <CardHeader>
              <Flex alignItems={"center"}>
                <Avatar
                  mr={2}
                  size={"md"}
                  name={`${employee.e_first_name} ${employee.e_last_name}`}
                />
                <Heading size="md">{employee.e_first_name}'s Details</Heading>
              </Flex>
            </CardHeader>

            <CardBody>
              <Stack divider={<StackDivider />} spacing="4">
                <Box>
                  <Heading size="xs" textTransform="uppercase">
                    General Information
                  </Heading>
                  <Text pt="2" fontSize="sm">
                    {employee.e_first_name} {employee.e_last_name}
                  </Text>
                  <Text pt="2" fontSize="sm">
                    {employee.e_email}
                  </Text>
                  <Text pt="2" fontSize="sm">
                    {employee.e_phone}
                  </Text>
                </Box>
                <Box>
                  <Heading size="xs" textTransform="uppercase">
                    Education
                  </Heading>
                  {employee.employee_education &&
                    employee.employee_education.map((education) => (
                      <Box key={education.ee_id}>
                        <Text pt="2" fontSize="sm">
                          {education.ee_school}
                        </Text>
                        <Text pt="2" fontSize="sm">
                          {education.ee_level} in {education.ee_course}
                        </Text>
                        <Text pt="2" fontSize="sm">
                          {education.ee_start_date} to {education.ee_end_date}
                        </Text>
                      </Box>
                    ))}
                </Box>
                <Box>
                  <Heading size="xs" textTransform="uppercase">
                    Past Employment
                  </Heading>
                  {employee.employee_work_experience &&
                    employee.employee_work_experience.map((experience) => (
                      <Box key={experience.ewe_id}>
                        <Text pt="2" fontSize="sm">
                          {experience.ewe_company}
                        </Text>
                        <Text pt="2" fontSize="sm">
                          {experience.ewe_designation}
                        </Text>
                        <Text pt="2" fontSize="sm">
                          {experience.ewe_start_date} to{" "}
                          {experience.ewe_end_date}
                        </Text>
                        <Text pt="2" fontSize="sm">
                          Resignation Reason: {experience.ewe_resign_reason}
                        </Text>
                      </Box>
                    ))}
                </Box>
                <Box>
                  <Heading size="xs" textTransform="uppercase">
                    Family
                  </Heading>
                  <Text pt="2" fontSize="sm">
                    See a detailed analysis of all your business clients.
                  </Text>
                </Box>
                <Box>
                  <Heading size="xs" textTransform="uppercase">
                    Emergency Contact
                  </Heading>
                  <Text pt="2" fontSize="sm">
                    See a detailed analysis of all your business clients.
                  </Text>
                </Box>
                <Box>
                  <Heading size="xs" textTransform="uppercase">
                    Bank
                  </Heading>
                  <Text pt="2" fontSize="sm">
                    See a detailed analysis of all your business clients.
                  </Text>
                </Box>
              </Stack>
            </CardBody>
          </Card>
        </>
      )}
    </>
  );
};

export default EmployeeDetails;
