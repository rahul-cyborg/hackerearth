arr = gets.chomp.strip.split(' ').map(&:to_i)
n = arr[0]
k = arr[1]

samosas = gets.chomp.strip.split(' ').map(&:to_i)

temp = samosas.sort
count = 0
sum = 0
temp.each do |val|
  sum += val
  if sum <= k
    count += 1
  else
    break
  end
end

puts count