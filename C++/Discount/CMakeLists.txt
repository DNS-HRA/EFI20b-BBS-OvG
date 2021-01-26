# cmake_minimum_required(VERSION <specify CMake version here>)
project(Test)

set(CMAKE_CXX_STANDARD 14)

include_directories(.)
include_directories(.idea)
include_directories(cmake-build-debug)

add_executable(Test
        .idea/workspace.xml
        CMakeLists.txt
        main.cpp)
