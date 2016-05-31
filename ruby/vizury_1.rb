test_cases = gets.chomp.strip.to_i

input1 = []
input2 = []

test_cases.times do
  input1 <<  gets.chomp.strip.split(' ').map(&:to_i)
  input2 <<  gets.chomp.strip.split(' ').map(&:to_i)
end


def sum(arr,n,m)
  temp = []
  arr.combination(m).to_a.each do |ar|
    sum = 0
    (1...ar.length).each do |i|
      sum += (ar[i] - ar[i - 1]).abs
    end
    temp << sum
  end
  temp.max
end


out = []

(0...input1.length).each do |i|
  n = input1[i][0]
  m = input1[i][1]
  arr = input2[i]
  out << sum(arr,n,m)
end

puts out





