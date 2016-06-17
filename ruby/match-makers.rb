n = gets.chomp.strip.to_i

input = []

n.times do
  input << gets.chomp.strip.to_i
  input <<  gets.chomp.strip.split(' ').map(&:to_i).sort
  input <<  gets.chomp.strip.split(' ').map(&:to_i).sort
end

out = []

(0...input.length).step(3).each do |i|
  len = input[i]
  girls = input[i + 1]
  boys = input[i + 2]
  sum = 0

  #(0...len).each do |k|
   # sum += 1 if (girls[k] % boys[k] == 0 || boys[k] % girls[k] == 0)
  #end
  i = 0
  j = len - 1

  while j >= 0 && i <= len - 1
    sum += 1 if (girls[i] % boys[j] == 0 || boys[j] % girls[i] == 0)
    i += 1
    j -= 1
  end

  out << sum
end
puts out

