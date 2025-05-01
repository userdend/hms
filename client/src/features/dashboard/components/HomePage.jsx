import React from "react";
import {
  Box,
  Flex,
  Heading,
  Text,
  VStack,
  HStack,
  Spacer,
  Button,
  useColorMode,
  useColorModeValue,
} from "@chakra-ui/react";

const Dashboard = () => {
  const { colorMode, toggleColorMode } = useColorMode();
  const cardBg = useColorModeValue("gray.100", "gray.700");

  return (
    <Flex height="">
      {/* Main Content */}
      <Box flex="1" p="6" bg={useColorModeValue("gray.50", "gray.800")}>
        {/* Top Navbar */}
        <Flex mb="6" align="center">
          <Heading fontSize="xl">Welcome back, Boyd 👋</Heading>
          <Spacer />
          <Button onClick={toggleColorMode}>
            Toggle {colorMode === "light" ? "Dark" : "Light"}
          </Button>
        </Flex>

        {/* Dashboard Cards */}
        <HStack spacing="6" mb="6">
          <Box bg={cardBg} p="6" rounded="xl" shadow="md" flex="1">
            <Text fontSize="lg" fontWeight="bold">
              Users
            </Text>
            <Text fontSize="2xl">1,250</Text>
          </Box>
          <Box bg={cardBg} p="6" rounded="xl" shadow="md" flex="1">
            <Text fontSize="lg" fontWeight="bold">
              Revenue
            </Text>
            <Text fontSize="2xl">$4,500</Text>
          </Box>
          <Box bg={cardBg} p="6" rounded="xl" shadow="md" flex="1">
            <Text fontSize="lg" fontWeight="bold">
              Pending Orders
            </Text>
            <Text fontSize="2xl">32</Text>
          </Box>
        </HStack>

        {/* Placeholder for charts or tables */}
        <Box bg={cardBg} p="6" rounded="xl" shadow="md">
          <Text fontSize="lg" fontWeight="bold" mb="2">
            Activity
          </Text>
          <Text color="gray.500">More content coming soon...</Text>
        </Box>
      </Box>
    </Flex>
  );
};

export default Dashboard;
