require 'prime'

 def divisors_of(num)
   (1..num).select { |n|num % n == 0}.length
 end
 
out = []
arr = gets.chomp.strip.split(' ')
n = arr[0].to_i
test_cases = arr[1].to_i

distance = 0
no_of_people = 0 
floor = 1
test_cases.times do

  temp_arr = gets.chomp.strip.split(' ')
  t = temp_arr[0].to_i
  f = temp_arr[1].to_i
  k = temp_arr[2].to_i

  if t == 1
    num = f + k
    if Prime.prime?(num) 
      distance += (floor - f).abs
      floor = f
      no_of_people = no_of_people + k
    end 
  else
     num = f + k
    if divisors_of(num) % 2 == 1
      distance += (floor - f).abs
      floor = f
      no_of_people =  no_of_people - k
    end
  end
end

puts distance.to_s % 1000000007 + ' ' + no_of_people.to_s





