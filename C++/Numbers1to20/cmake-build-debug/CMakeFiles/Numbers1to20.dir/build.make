# CMAKE generated file: DO NOT EDIT!
# Generated by "NMake Makefiles" Generator, CMake Version 3.17

# Delete rule output on recipe failure.
.DELETE_ON_ERROR:


#=============================================================================
# Special targets provided by cmake.

# Disable implicit rules so canonical targets will work.
.SUFFIXES:


.SUFFIXES: .hpux_make_needs_suffix_list


# Command-line flag to silence nested $(MAKE).
$(VERBOSE)MAKESILENT = -s

# Suppress display of executed commands.
$(VERBOSE).SILENT:


# A target that is always out of date.
cmake_force:

.PHONY : cmake_force

#=============================================================================
# Set environment variables for the build.

!IF "$(OS)" == "Windows_NT"
NULL=
!ELSE
NULL=nul
!ENDIF
SHELL = cmd.exe

# The CMake executable.
CMAKE_COMMAND = "C:\Program Files\JetBrains\CLion 2020.2.4\bin\cmake\win\bin\cmake.exe"

# The command to remove a file.
RM = "C:\Program Files\JetBrains\CLion 2020.2.4\bin\cmake\win\bin\cmake.exe" -E rm -f

# Escaping for special characters.
EQUALS = =

# The top-level source directory on which CMake was run.
CMAKE_SOURCE_DIR = C:\Users\germa\Documents\BBS_OvG\C++\Numbers1to20

# The top-level build directory on which CMake was run.
CMAKE_BINARY_DIR = C:\Users\germa\Documents\BBS_OvG\C++\Numbers1to20\cmake-build-debug

# Include any dependencies generated for this target.
include CMakeFiles\Numbers1to20.dir\depend.make

# Include the progress variables for this target.
include CMakeFiles\Numbers1to20.dir\progress.make

# Include the compile flags for this target's objects.
include CMakeFiles\Numbers1to20.dir\flags.make

CMakeFiles\Numbers1to20.dir\main.cpp.obj: CMakeFiles\Numbers1to20.dir\flags.make
CMakeFiles\Numbers1to20.dir\main.cpp.obj: ..\main.cpp
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green --progress-dir=C:\Users\germa\Documents\BBS_OvG\C++\Numbers1to20\cmake-build-debug\CMakeFiles --progress-num=$(CMAKE_PROGRESS_1) "Building CXX object CMakeFiles/Numbers1to20.dir/main.cpp.obj"
	C:\PROGRA~2\MICROS~3\2019\COMMUN~1\VC\Tools\MSVC\1428~1.293\bin\Hostx86\x86\cl.exe @<<
 /nologo /TP $(CXX_DEFINES) $(CXX_INCLUDES) $(CXX_FLAGS) /FoCMakeFiles\Numbers1to20.dir\main.cpp.obj /FdCMakeFiles\Numbers1to20.dir\ /FS -c C:\Users\germa\Documents\BBS_OvG\C++\Numbers1to20\main.cpp
<<

CMakeFiles\Numbers1to20.dir\main.cpp.i: cmake_force
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green "Preprocessing CXX source to CMakeFiles/Numbers1to20.dir/main.cpp.i"
	C:\PROGRA~2\MICROS~3\2019\COMMUN~1\VC\Tools\MSVC\1428~1.293\bin\Hostx86\x86\cl.exe > CMakeFiles\Numbers1to20.dir\main.cpp.i @<<
 /nologo /TP $(CXX_DEFINES) $(CXX_INCLUDES) $(CXX_FLAGS) -E C:\Users\germa\Documents\BBS_OvG\C++\Numbers1to20\main.cpp
<<

CMakeFiles\Numbers1to20.dir\main.cpp.s: cmake_force
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green "Compiling CXX source to assembly CMakeFiles/Numbers1to20.dir/main.cpp.s"
	C:\PROGRA~2\MICROS~3\2019\COMMUN~1\VC\Tools\MSVC\1428~1.293\bin\Hostx86\x86\cl.exe @<<
 /nologo /TP $(CXX_DEFINES) $(CXX_INCLUDES) $(CXX_FLAGS) /FoNUL /FAs /FaCMakeFiles\Numbers1to20.dir\main.cpp.s /c C:\Users\germa\Documents\BBS_OvG\C++\Numbers1to20\main.cpp
<<

# Object files for target Numbers1to20
Numbers1to20_OBJECTS = \
"CMakeFiles\Numbers1to20.dir\main.cpp.obj"

# External object files for target Numbers1to20
Numbers1to20_EXTERNAL_OBJECTS =

Numbers1to20.exe: CMakeFiles\Numbers1to20.dir\main.cpp.obj
Numbers1to20.exe: CMakeFiles\Numbers1to20.dir\build.make
Numbers1to20.exe: CMakeFiles\Numbers1to20.dir\objects1.rsp
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green --bold --progress-dir=C:\Users\germa\Documents\BBS_OvG\C++\Numbers1to20\cmake-build-debug\CMakeFiles --progress-num=$(CMAKE_PROGRESS_2) "Linking CXX executable Numbers1to20.exe"
	"C:\Program Files\JetBrains\CLion 2020.2.4\bin\cmake\win\bin\cmake.exe" -E vs_link_exe --intdir=CMakeFiles\Numbers1to20.dir --rc=C:\PROGRA~2\WI3CF2~1\10\bin\100183~1.0\x86\rc.exe --mt=C:\PROGRA~2\WI3CF2~1\10\bin\100183~1.0\x86\mt.exe --manifests  -- C:\PROGRA~2\MICROS~3\2019\COMMUN~1\VC\Tools\MSVC\1428~1.293\bin\Hostx86\x86\link.exe /nologo @CMakeFiles\Numbers1to20.dir\objects1.rsp @<<
 /out:Numbers1to20.exe /implib:Numbers1to20.lib /pdb:C:\Users\germa\Documents\BBS_OvG\C++\Numbers1to20\cmake-build-debug\Numbers1to20.pdb /version:0.0  /machine:X86 /debug /INCREMENTAL /subsystem:console  kernel32.lib user32.lib gdi32.lib winspool.lib shell32.lib ole32.lib oleaut32.lib uuid.lib comdlg32.lib advapi32.lib 
<<

# Rule to build all files generated by this target.
CMakeFiles\Numbers1to20.dir\build: Numbers1to20.exe

.PHONY : CMakeFiles\Numbers1to20.dir\build

CMakeFiles\Numbers1to20.dir\clean:
	$(CMAKE_COMMAND) -P CMakeFiles\Numbers1to20.dir\cmake_clean.cmake
.PHONY : CMakeFiles\Numbers1to20.dir\clean

CMakeFiles\Numbers1to20.dir\depend:
	$(CMAKE_COMMAND) -E cmake_depends "NMake Makefiles" C:\Users\germa\Documents\BBS_OvG\C++\Numbers1to20 C:\Users\germa\Documents\BBS_OvG\C++\Numbers1to20 C:\Users\germa\Documents\BBS_OvG\C++\Numbers1to20\cmake-build-debug C:\Users\germa\Documents\BBS_OvG\C++\Numbers1to20\cmake-build-debug C:\Users\germa\Documents\BBS_OvG\C++\Numbers1to20\cmake-build-debug\CMakeFiles\Numbers1to20.dir\DependInfo.cmake --color=$(COLOR)
.PHONY : CMakeFiles\Numbers1to20.dir\depend

